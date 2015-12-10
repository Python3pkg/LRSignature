#!/usr/local/bin/python
# -*- coding: utf-8 -*- 
import re
import hashlib
import gnupg
import types
import os, copy
from bencode import bencode

startJSON = '{"activity":{"actor":{"displayName": "Joe Hobson","id": "http://linkedin.com/in/joehobson","objectType": "Person"},"object": {"displayName": "Brokers of Expertise Standards Matchers","id": "http://myboe.org/go/groups/standards_matchers","objectType": "group"  },"verb": {"action": "endorse","content": "The Brokers of Expertise Standards Matchers group found at http://myboe.org/go/groups/standards_matchers was endorsed by Joe Hobson.","date": "2015-08-11"}}}';

encoded = bencode(startJSON)
hashedText = hashlib.sha256(encoded).hexdigest()

# Print it
print ("Encoded : %s" % encoded)
print ("hashed : %s" % hashedText)