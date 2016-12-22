#!/bin/bash

yum update -y
yum groupinstall -y "Web Server" "PHP Support"
