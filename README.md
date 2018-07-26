Flat Rock Technology Terminal
==============================

Getting started
------------------------------
1. Clone the repository
2. Run `composer install`
3. Edit the `index.php`
4. Run the code via `php index.php` inside your terminal/cmd.

Terminal API
------------------------------

The terminal API is very simple and expose just two function:

* `getAllPossible(): array` - Returns a flat array with all possible pass-codes

* `attempt(string $password): int` - Attempts to unlock the terminal via the passed pass-code.  If the pass-code is the right one, the terminal will be unlocked and the script will be terminated. If the pass-code is wrong, the function will return an index of similarity. If the attempts are exhausted, the terminal will be blocked and the script will be terminated.

Screenshots
-------------------------------

![Screenshot1](screenshots/shot1.png)

![Screenshot2](screenshots/shot2.png)
