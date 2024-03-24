#!/bin/bash

set -e

WEBSERVER_HOSTNAME=webserver

ssh ${WEBSERVER_HOSTNAME} mkdir -p ~/website
scp -r ./* ${WEBSERVER_HOSTNAME}:~/website/
ssh ${WEBSERVER_HOSTNAME} "cd website; ./install.sh"
