#!/bin/sh
# see https://ypereirareis.github.io/blog/2016/02/29/docker-crontab-environment-variables/

printenv | sed 's/^\(.*\)$/export \1/g'