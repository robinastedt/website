#!/bin/sh -e


IMAGE_NAME=webapp
CONTAINER_NAME=webapp
SERVICE_LOGIN=webapp
# SERVICE_NAME=webapp
# SERVICE_PATH=/home/${SERVICE_LOGIN}/.config/systemd/user/${SERVICE_NAME}.service

if ! id -u ${SERVICE_LOGIN} > /dev/null 2>/dev/null
then
    echo "Creating service user..."
    # Should probably be a system user (-r),
    # but podman gets some strange errors
    # relating to it lacking subuid entries?
    sudo useradd -m -U ${SERVICE_LOGIN}
    echo "Done!"
fi

echo "Enable lingering for service user..."
sudo loginctl enable-linger ${SERVICE_LOGIN}
echo "Done!"

echo "Enable podman-restart service..."
sudo systemctl --machine ${SERVICE_LOGIN}@.host --user enable podman-restart
echo "Done!"

echo "Building image..."
sudo -u ${SERVICE_LOGIN} XDG_RUNTIME_DIR="/run/user/$(id -u ${SERVICE_LOGIN})" \
podman build --layers --force-rm --tag ${IMAGE_NAME} .
echo "Done!"

echo "Starting container..."
sudo -u ${SERVICE_LOGIN} XDG_RUNTIME_DIR="/run/user/$(id -u ${SERVICE_LOGIN})" \
podman run \
--detach \
--replace \
--publish 8080:8080 \
--restart=always \
--name ${CONTAINER_NAME} \
${IMAGE_NAME} \
httpd -f /opt/app-root/src/conf/httpd.conf -D FOREGROUND
echo "Done!"
