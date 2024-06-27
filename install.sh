#!/bin/bash

set -ex

systemctl --user stop website.service || true
systemctl --user stop website-renew-cert.timer || true

cp website.service ~/.config/systemd/user/website.service
cp website-renew-cert.service ~/.config/systemd/user/website-renew-cert.service
cp website-renew-cert.timer ~/.config/systemd/user/website-renew-cert.timer
systemctl --user daemon-reload

podman compose --in-pod 1 down || true
podman volume rm website_webroot website_nginx_config || true
podman image rm website_web_server website_proxy_server || true
sleep 5  # Because, fuck synchronocity, amirite (or skill issue?)
podman compose --in-pod 1 build
systemctl --user enable --now website.service
systemctl --user enable --now website-renew-cert.timer
