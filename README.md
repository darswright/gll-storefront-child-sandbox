# GLL Child Theme + Webpack

This is a child theme for use with the WooCommerce Storefront parent theme. Webpack has been added to assist with development and bundling assets.

## Requirements

The following software needs to be installed on your machine to use this child theme:

- Git - Install using Homebrew
- Node + NPM - Install using NVM via Homebrew

Install Homebrew from [here](https://brew.sh/). Then install Git and Node Version Manager (NVM) by running this command in your terminal - `brew install git nvm`.

After they have been installed follow the instructions in the terminal to add NVM to your \$PATH and run `nvm install 10 -lts` to install Node and NPM.

## Instructions for use

1. Clone/download this repo into your local WordPress' themes/ directory
2. In your terminal, cd into the 'src/' directory of the child theme and run `npm i` to install Webpack and dependancies
3. Update `proxyTarget:` property in `src/compiler/config.js` to match your local site URL
4. Webpack commands are `npm run serve` to spin up a localhost for development and `npm run build` for bundling everything for production
