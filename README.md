<!-- ![CraftVM Logo](https://raw.githubusercontent.com/craftvm/boilerplate/master/logo.jpg "Automation Eats the World.") -->
[![CircleCI](https://circleci.com/gh/craftvm/boilerplate/tree/master.svg?style=shield&circle-token=f1de6e33a5bfe93a31e8915e9eb5ac9d32ec1416)](https://circleci.com/gh/craftvm/boilerplate/tree/master)
[![Packagist](https://img.shields.io/packagist/dt/craftvm/boilerplate.svg)](https://packagist.org/packages/craftvm/boilerplate)
# CraftVM Boilerplate
### DevOps Infrastructure for Craft CMS.

A project-based, host-agnostic, and version-controlled development environment that builds and operates production environments on AWS.

<!--
- Ubuntu 16.04 LTS
- Nginx 1.12+
- MySQL 5.7
- PHP 7.1+
- Node 6.x
- Composer -->

<!--
- Git(HUB)
- Postgres
- Composer
- Node (With Yarn, Bower, Grunt, and Gulp)
- Redis
- Memcached
- Beanstalkd
- Mailhog -->

Visit the [wiki](https://github.com/craftvm/boilerplate/wiki) for more information.


## Installation
### Prerequisites ###

- `brew install composer`
- `brew cask install vagrant virtualbox`
- `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-bindfs`

### Project Boilerplate

1. Create a new project with Composer.
```
composer create-project craftvm/boilerplate PROJECT -s dev && cd PROJECT
```

2. Change the remote origin to a private repository.
```
git remote set-url origin git@github.com:USERNAME/REPO.git
```

3. Configure ops/config/project.yml to reflect your needs.
  - `project_local_ip: "10.10.10.10"`
  - `project_local_domain: "craftvm"`

4. Up and Enter!
```
vagrant up && vagrant ssh
```

5. Visit [http://{project_local_domain}.dev/admin](http://craftvm.dev/install) to install Craft CMS.

6. Visit the [wiki](https://github.com/craftvm/boilerplate/wiki) to setup and deploy a production environment on AWS*.

**\*DISCLAIMER**: It is your responsibility as a Developer, SysAdmin, or Cloud Architect to understand and use these tools safely and effectively. It is not the responsibility of, I or, any contributing developer to ensure your usage adheres to industry standards. As such, use this software AT YOUR OWN RISK.

**\*NOTE**: If you feel comfortable with the development environment, but would like someone else to run your cloud operations, please [contact me](https://bgrrtt.com).

## Acknowledgments

Thanks to [@pixelandtonic](https://github.com/pixelandtonic), [@khalwat](https://github.com/khalwat), and [@geerlingguy](https://github.com/geerlingguy) for their work and influence.
