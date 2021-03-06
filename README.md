# Orientamento Website Theme

## TOC

- [Plan](#plan)
- [Schedule](#schedule)
- [Stack](#stack)
  - [Wordpress Installation](#wordpress-installation)
- [Meeting Notes](#notes)
  - [21 October 2020](#21102020)
- [Deployment](#deployment)

<a name="plan" />

## Plan

- Week: 7/10 - 14/10
  - [x] Plan Making
  - [x] Schedule Making
- Week: 14/10 - 21/10:
  - [x] Website Design
  - [x] Choice of Website Stack
- Week: 21/10 - 11/11:
  - [x] Development of first mock
    - [x] Index Page
    - [x] Header and Menu
    - [x] Footer
    - [x] 404 Page
    - [x] Archive Page
      - [x] Research how to create archive page
      - [x] Create a row for each category
- Week: 11/11 - 11/12:
  - [x] Development of first mock
    - [x] Front Page
    - [x] Post Page
    - [x] Event Calendar Page
- Week: 11/12 - 30/01:
  - [ ] Standup Meeting with Ms. Vilk & Mr. Poggi
    - [ ] Adjusting mock to fit standup feedback
  - [x] Research Deployment Stack
    - [Deployment Service](#deployment) 
  - [ ] Deployment
- Week: 30/01 - ...:
  - [ ] Find writers for articles
  - [ ] Insert Data
  - [ ] Begin Website Maintainance

<a name="schedule" />

## Schedule

- Wednesday: Period 1 & 2
- Thurday: Period 1 & 2

_+ free time if needed_

<a name="stack" />

## Choice of Website Stack

- Front-End:
  - PHP
  - HTML
  - CSS
- CMS:
  - Wordpress

<a name="wordpress-installation" />

### Wordpress Installation

For the installation this project uses [roots/bedrock](https://roots.io/bedrock/)
which allows for a wordpress installation with a better file structure and a
better ease of development. Currently debating whether to switch to [roots/sage](https://roots.io/sage)
instead of the current theme structure but that would require a complete 
remake of the theme.

<a name="notes" />

## Meeting Notes

<a name="21102020" />

### 21 October 2020

- Pinboard of Events
- Advice through 3rd Parties
  - Click-thourgh Pages
  - Links to google drive
- Set Path for various regions for UNI
- Calendar with presentations on calendar
- Archive Section
- _Writeups for the articles about the events_

<a name="deployment" />

## Deployment

**NOTE:** *The current deployment stack is simply a development workflow and
should be not taken as live final deployment. It is simply a testing for the 
production deployment to make sure that all the elements work with the production
database setup and non-managed installation of woedpress.*

- Host: [Pantheon](https://pantheon.io)
- Dev Site: [dev-orientamento.pantheonsite.io](https://dev-orientamento.pantheonsite.io)
- Test Site: [test-orientamento.pantheonsite.io](https://test-orientamento.pantheonsite.io)
- Live Site: [live-orientamento.pantheonsite.io](https://live-orientamento.pantheonsite.io)

### Ideas for complete deployment

- School web server to use a sub-domain of h-is or h-farm
- [Siteground hosting](https://siteground.com)
- [Linode](https://linode.com) or [Digital Ocean](https://digitalocean.com)
- [Namecheap Easy WP](https://www.namecheap.com/wordpress/)
