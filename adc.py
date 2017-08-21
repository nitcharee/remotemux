#!/usr/bin/python

import smbus
import sys
import time


bus = smbus.SMBus(1)
bus.write_byte_data(0x33, int(sys.argv[1]), int(sys.argv[2]))
time.sleep(0.1)
#print hex(bus.read_word_data(0x33,1))
print bus.read_word_data(0x33,int(sys.argv[1]))
