#!/usr/bin/python

import smbus
import sys
import time
#import RPi.GPIO as GPIO


bus = smbus.SMBus(1)    # 0 = /dev/i2c-0 (port I2C0), 1 = /dev/i2c-1 (port I2C1)
DEVICE_ADDRESS = int(sys.argv[1]) #0x20     #7 bit address (will be left shifted to add the read write bit)
DEVICE_REG_MODE1 = int(sys.argv[2])

#Write a single register

bus.write_byte_data(DEVICE_ADDRESS, DEVICE_REG_MODE1, int(sys.argv[3]))