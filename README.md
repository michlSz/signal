# signal---individual-project

PHP based project to share cryptocurrency signals. 


You can see the project on http://enemer.kylos.pl/signal2/

!! =========== IMPORTANT ========== !!

Signals might not occur:
- if you have adBlock turn on
- when API request will run out (only 100 per day in free plan on coinapi.io)

!! ================================ !!


Basic features:
- create account
- login/logout
- add signals
- add signal comments/updates

The typical signal contains:
- crypto current price
- signal pair
- entry level
- 4 targets
- stop-loss
- market
- timeframe
- risk


You can see dynamically when targets are reached.

There are 3 types of user role:
Admin
Analyst
User

User role privileges:

Admin:
- add signals
- view all signals
- add any comment to every signal
- View all users
- add user
- delete user
- change user role

Analyst:
- add signals
- view analyst signals in the admin panel
- view all signals on the front-end
- add a comment to analyst signal

User:
- see all signals on the front-end

