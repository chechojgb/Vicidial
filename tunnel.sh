#!/bin/bash
ssh -f -N -L 3308:localhost:3306 root@172.17.8.205

#ssh -L 3309:localhost:3306 root@172.17.8.205