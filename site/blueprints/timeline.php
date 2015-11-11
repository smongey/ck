<?php if(!defined('KIRBY')) exit ?>

title: Timeline
pages: false
files: true
fields:
	title:
		label: Title
		type:  text
	years: 
		label: Years
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:30%;margin-bottom:20px;">
					<strong>{{year}}</strong>
				</div>
				<div style="float:right; width:70%;margin-bottom:20px;">
					{{description}}
				</div>
				<div style="float:left; width:100%; text-align: center;">
					<img src="{{photo}}" width="100%">
				</div>
			</div>
		fields: 
			year:
				label: Title
				type:  text
			description:
				label: Description
				type:  textarea
			photo:
				label: Photo
				type:  select
				options: query
				query:
					fetch: files
					value: '{{url}}'
					text: '{{filename}}'