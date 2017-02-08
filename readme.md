![Nette from Scratch](https://guides.nanobox.io/assets/quickstart-icons/nette.png)

# Nette from scratch

Run a Nette app locally, install nothing besides nanobox.

<a href="https://nanobox.io/download"><img src="https://guides.nanobox.io/assets/quickstart-icons/download.png" /></a>


## Clone the repo

```bash
# clone the code
git clone https://github.com/nanobox-quickstarts/nanobox-nette.git

# cd into the nette app
cd nanobox-nette
```

## Run the app

```bash
# Optinally enable nette debug mode
nanobox evar add local NETTE_DEVEL=1

# Add a convenient way to access your app from the browser
nanobox dns add local nette.dev

# Run nette using nette-php-server, with Nanobox
nanobox run php -S 0.0.0.0:8000 -t www
```

## Check it out

Visit your app at <a href="http://nette.dev:8000" target="\_blank">nette.dev:8000</a>

## Explore

With Nanobox, you don't have to have anything installed on your machine to run your app:

```bash
# drop into a Nanobox console
nanobox run

# where nette is installed,
php -v

# your packages are available,
composer show

# and your code is mounted
ls
```

## Now What?
For more details about running nette apps with nanobox visit [guides.nanobox.io/php/nette/](https://guides.nanobox.io/php/nette/)

<a href="https://nanobox.io"><img src="https://guides.nanobox.io/assets/quickstart-icons/footer.png" /></a>
