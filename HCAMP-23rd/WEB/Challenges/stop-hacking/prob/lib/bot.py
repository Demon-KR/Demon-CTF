from flask import request, abort, session
from flask import render_template
from functools import wraps
from flask import Flask, Response 
import sqlite3

class Bot:
	def __init__(self, cursor):
		self.name = cursor

	def detected_bot(self, user_agent):
		# init
		session['user_agent'] = user_agent
		session['bot_name'] = ''
		session['is_bot'] = False

		# find 
		self.name.execute('SELECT name from bot where user_agent="%s"' % user_agent)
		session['bot_name'] = self.name.fetchone()
		if session['bot_name'] is not None:
			session['is_bot'] = True
			session['bot_name'] = session['bot_name'][0]

		return session['bot_name']
		
	def check(self, f):
		'''
		deco function for detect bot
		'''
		@wraps(f)
		def deco_func(*args, **kwargs):
			try:
				if 'is_bot' not in session:
					return render_template('checkbot.html')

				if session['is_bot'] != True:
					return render_template(
						'bot.html',
						botname=session['bot_name'],
						useragent=session['user_agent']
					)
				return f(*args, **kwargs)
			except Exception as e:
				print(e)
				abort(500)

		return deco_func

	
if __name__ == '__main__':
	'''
	test
	'''
	user_agent = "This is user agent; 360Spider"
	bot = Bot()
	bot_name = bot.detected_bot(user_agent)
	print(bot_name, user_agent)


