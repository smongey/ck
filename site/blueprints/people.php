<?php if(!defined('KIRBY')) exit ?>

title: People
pages:
  template: person
files: true
fields:
	title:
		label: Title
		type:  text
	staff:
		label: Staff Text
		type:  textarea
		width: 1/2
	leadership:
	    label: Leadership Text
	    type:  textarea
	    width: 1/2
	gallery:
		label: Staff Image Gallery
		type: structure
		help: Images must all uploaded at the same size at 1200 x 600 pixels
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:100%; text-align: center;">
					<img src="{{photo}}" width="100%">
					{{alttext}}
				</div>
			</div>
		fields:
			photo:
				label: Photo
				type:  select
				options: query
				query:
					fetch: files
					value: '{{url}}'
					text: '{{filename}}'
			alttext:
				label: Title
				type:  text
