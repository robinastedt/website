#!/bin/bash

set -ex

echo "Warning! Make sure to remove existing volumes and images if you intend on overwriting it!"
echo "Press Enter to continue..."
read

podman compose --in-pod 1 down || true
podman compose --in-pod 1 run --rm certbot certonly --webroot --webroot-path /var/www/robinastedt.com/ -d robinastedt.com