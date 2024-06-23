#!/bin/bash

set -ex

podman compose --in-pod 1 run --rm certbot renew
