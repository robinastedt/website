#!/bin/bash

WEBSERVER_HOSTNAME=webserver

scp -r ./* ${WEBSERVER_HOSTNAME}:~/
ssh ${WEBSERVER_HOSTNAME} "cd website; ./install.sh"
