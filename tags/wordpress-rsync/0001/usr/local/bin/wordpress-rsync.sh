#!/bin/bash
if [ `hostname | grep web1` ]; then INST=2; else exit 0; fi
SYNC_FOLDER='/tmp/test/';

while inotifywait -r -e modify,create,delete $SYNC_FOLDER; do
    rsync -avz web$INST.g4.gm.a8c.com:$SYNC_FOLDER $SYNC_FOLDER
done
