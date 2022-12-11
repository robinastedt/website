#!/bin/sh -e

echo "Stopping podman container..."
sudo -u webapp podman container stop webapp
echo "Done!"

echo "Deleting podman images..."
sudo -u webapp podman rmi $(sudo -u webapp podman images -qa) -f
echo "Done!"

echo "Stopping podman-restart service..."
sudo systemctl --machine webapp@.host --user stop podman-restart
echo "Done!"

echo "Disable podman-restart service..."
sudo systemctl --machine webapp@.host --user disable podman-restart
echo "Done!"

echo "Disable lingering of service user..."
sudo loginctl disable-linger webapp
echo "Done!"

echo "Wait a bit for processes to finish..."
sleep 5
echo "Done!"

echo "Remove service user..."
echo "This might fail if some process is still accessing the user."
echo "If that is the case run 'sudo userdel -r webapp' manually."
sudo userdel -r webapp
echo "Done!"