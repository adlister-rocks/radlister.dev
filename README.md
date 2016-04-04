# Radlister is a Radical Advertisement Listing Service

## Rational
Radlister is a full stack amazon/craigslist clone.

## Getting Started
- clone the repo
- create a new .dev site
- `ansible-playbook ansible/playbooks/vagrant/site/static.yml`
- update your hosts file
    - `subl /etc/hosts` on the mac
    - add the .dev site and the ip address that matches other sits on your VM
- create a mysql db called radlister_db
- `ansible-playbook ansible/playbooks/vagrant/mysql/database.yml`
- on your VM, run any migrations and seeders

## File Structure and layout

    database/
        migration.php
        seeder.php

    models/
        Ad.php
        BaseModel.php
        User.php

    public/
        css/
            main.css       // site styles
        img/
            logo.png
        js/
            main.js        // site javascript

        ads.create.php     // ad creation form
        ads.edit.php       // ad editing form
        ads.index.php      // listing of all ads
        ads.show.php       // view of individual ad

        auth.login.php     // login form
        auth.logout.php    // logout action

        index.php          // marketing homepage

        users.create.php   // user signup
        users.edit.php     // user editing form
        users.show.php     // user profile

    utils/
        Auth.php
        Input.php
        Logger.php

    views/
        partials/
            header.php
            footer.php
            navbar.php

    bootstrap.php          // site initialization

