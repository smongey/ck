<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
	title:
	    label: Title
	    type:  text
	gallery: 
		label: Home Images
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:50%; text-align: center;">
					<img src="{{photo}}" width="50%">
				</div>
				<div style="float:right; width: 50%;">
				<p>{{alttext}}</p>
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
				label: Alt Text
				type:  text
	mobilegallery: 
		label: Mobile Home Images
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:50%; text-align: center;">
					<img src="{{photo}}" width="50%">
				</div>
				<div style="float:right; width: 50%;">
				<p>{{alttext}}</p>
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
				label: Alt Text
				type:  text
