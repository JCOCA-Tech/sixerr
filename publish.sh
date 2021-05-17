#!/bin/bash

# show whats about to be copied
sudo rsync -nav --progress ../sixerr/* /home/x/Documents/GitHub/SIXERR/ --exclude .git

# TODO grep args can be parsed as arg0
#rsync -nav --progress ../sixerr/* /home/x/Documents/GitHub/SIXERR/ --exclude .git | grep $0

# verification/abort dialouge
read -r -p "Are you sure? [y/N] " response
if [[ "$response" =~ ^([yY][eE][sS]|[yY])$ ]]
then
    echo
    echo "Starting rsync"
    echo
    # execute copy command
    sudo rsync -av --progress ../sixerr/* /home/x/Documents/GitHub/SIXERR/ --exclude .git
    echo
    echo "Done."
    echo
else
    echo
    echo "Aborting."
    echo
    exit 0
fi

# default exit
echo
echo "[[Stopping process]]"
echo
exit 0
