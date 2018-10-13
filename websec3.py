import hashlib, binascii

magic = '7c00'

for to_hash in range(1000000):
	b = binascii.hexlify(hashlib.sha1(str(to_hash)).digest())
	nibble = b[0:4]

	if nibble == magic:
		print to_hash
		print b
		break
	else:
		print "Doh!"
		
