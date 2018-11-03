import webapp2
import jinja2
import os


the_jinja_env = jinja2.Environment(
    loader=jinja2.FileSystemLoader(os.path.dirname(__file__)),
    extensions=['jinja2.ext.autoescape'],
    autoescape=True)


# the handler section
class WelcomePage(webapp2.RequestHandler):
    def get(self):  # for a get request
        welcome_template = the_jinja_env.get_template('templates/index.html')
        self.response.write(welcome_template.render())  
class SeekingPage(webapp2.RequestHandler):
    def get(self):
        welcome_template = the_jinja_env.get_template('templates/seeking.html')
        self.response.write(welcome_template.render())

app = webapp2.WSGIApplication([
    ('/', WelcomePage),
    ('/seeking', SeekingPage)
], debug=True)