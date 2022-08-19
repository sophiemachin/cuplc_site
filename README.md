# Development

To get started with modifying the CUPLC website one needs to first install a frew prerequisites. 

## Prerequisites
* Operating System: I'd recommend using Linux or macOS. If you're a windows user, I would not recommend developing in windows directly. [Windows Subsystem for Linux](https://docs.microsoft.com/en-us/windows/wsl/about) is great (and what I use). The instructions following will be for Ubuntu (Linux native/WSL), though parallels will exist for other linux distributions and for macOS
* An editor such as [VSCode](https://code.visualstudio.com/). Also install the [remote development extension pack](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack). 
* Ruby and other prerequisite can be installed fairly easily via a package manager. On Ubuntu, first run `sudo apt update` to update system repositories, and then `sudo apt-get install ruby-full build-essential zlib1g-dev`. Follow instructions [here](https://jekyllrb.com/docs/installation/) for other operating systems. 

Next, fork a copy of this repository, and run `git clone https://github.com/github_username/cuplc_site.git cuplc_site` to check out a local copy of this repository. 

This site is built using the static site builder Jekyll. This means the repository contains templates for each page, that must be built. In order to begin development, run `code cuplc_site` to open the repository in VSCode. In the integrated terminal, run `sudo gem update` and `sudo gem install bundler jekyll` to install the necessary packages to run jekyll. Then run `bundle update` to install the specific packages needed for our website. You should now be able to run `bundle exec jekyll serve` to run a local version of the website and test any changes you've made.

## Documentation

This site uses the [minimal mistakes theme](https://mmistakes.github.io/minimal-mistakes/), whose documentation is pretty comprehensive, and should cover most kinds of things you might want to change.

## Submitting changes

To submit changes, please create a pull request againist this repository.

## Deployment

This site is currently deployed via github pages at [cuplc.co.uk](cuplc.co.uk).

## Forms

As Jekyll produces a static site, and GitHub Pages does not allow server site code to be run, forms are configured via formspree. [formspree](https://formspree.io/guides/jekyll/). This shouldn't need to be touched, but the login information is in the handover document.
