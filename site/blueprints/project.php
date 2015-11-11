<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
    width: 1/2
    icon: calendar
  coordinates:
    label: Longitude/Latitude
    type:  text
    width: 1/2
    icon: map-marker
    help: right click on a google map where the location is,<br/>select “what’s here” and the co-ordinates will popup.<br/>They should be in the format<br/> 53.347149, -6.269927
  text:
    label: Text
    type:  textarea
  type:
    label: Project Type
    type:  select
    options: query
    width: 1/2
    query:
      page: types
      fetch: children
  region:
    label: Region
    type:  select
    options: query
    width: 1/2
    query:
      page: region
      fetch: children
  specialty:
    label: Specialties
    type:  checkboxes
    options: query
    query:
      page: project-specialties
      fetch: children
