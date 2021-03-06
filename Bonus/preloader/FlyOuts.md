Fügt den Code einfach in die `header.php` VOR dem `<body>` ein, damit die FylOuts korrekt funktionieren.

## LAYER

### CSS

```css
#ad .box {
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(255, 255, 255, .95);
	animation: fade .5s;
	transition: .5s
}

#ad .box-in {
	text-align: center;
	margin-top: 20%
}

#toggle-label {
	right: 0;
	color: #000;
	font: 100 65px/65px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	z-index: 500;
	transition: all .1s linear 0s;
	margin: 0 17px
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML

```html
<div id="ad">
   <input id="toggle" type="checkbox" checked> <label id="toggle-label" for="toggle"></label> 
   <div class="box">
      <div class="box-in">
         <a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=500&h=350"></a>
      </div>
   </div>
</div>
```

## 300x 250


### CSS

```css
#ad .box {
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	bottom: 20px;
	right: 25px;
	animation: fade .5s;
	transition: .5s
}

#toggle-label {
	color: #000;
	font: 100 25px/25px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	right: 30px;
	bottom: 252px;
	z-index: 500;
	transition: all .1s linear 0s
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML

```html
<div id="ad">
   <input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
   <div class="box">
      <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=300&h=250"></a></div>
   </div>
</div>
```

## 160 x 600

### CSS

```css
#ad .box {
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	bottom: 20px;
	right: 25px;
	animation: fade .5s;
	transition: .5s
}

#toggle-label {
	color: #000;
	font: 100 25px/25px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	right: 30px;
	bottom: 602px;
	z-index: 500;
	transition: all .1s linear 0s
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML

```html
<div id="ad">
   <input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
   <div class="box">
      <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=160&h=600"></a></div>
   </div>
</div>
```

## FOOTER-BAR

### CSS

```css
#ad .box {
	width: 100%;
	height: 100px;
	background: #ddd;
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	bottom: 0;
	animation: fade .5s;
	transition: .5s
}

#ad .box-in {
	text-align: center;
	margin: 5px 0 0
}

#toggle-label {
	color: #000;
	font: 100 25px/25px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	right: 5px;
	bottom: 77px;
	z-index: 500;
	transition: all .1s linear 0s
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML

```html
<div id="ad">
   <input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
   <div class="box">
      <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=728&h=90"></a></div>
   </div>
</div>
<div id="ad">
<input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
<div class="box">
   <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=728&h=90"></a></div>
</div>
```

## HEAEDER-BAR

### CSS

```css
#ad .box {
	width: 100%;
	height: 100px;
	background: #ddd;
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	top: 0;
	animation: fade .5s;
	transition: .5s
}

#ad .box-in {
	text-align: center;
	margin: 5px 0 0
}

#toggle-label {
	color: #000;
	font: 100 25px/25px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	right: 7px;
	top: 0;
	z-index: 500;
	transition: all .1s linear 0s
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML

```html
<div id="ad">
   <input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
   <div class="box">
      <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=728&h=90"></a></div>
   </div>
</div>
```

## PRE-ROLL ###


### CSS

```css
#ad .box {
	position: fixed;
	overflow: hidden;
	z-index: -1;
	opacity: 0;
	top: 25%;
	animation: fade .5s;
	transition: .5s
}

#toggle-label {
	color: #000;
	font: 100 25px/25px helvetica neue, segoe ui, arial;
	cursor: pointer;
	position: fixed;
	left: 705px;
	top: 25%;
	z-index: 500;
	transition: all .1s linear 0s
}

#toggle {
	display: none
}

#toggle:checked~.box {
	opacity: 1;
	z-index: 400
}

#toggle:checked~#toggle-label:before {
	content: "\00d7"
}

@keyframes fade {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
	@-webkit-keyframes fade {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
```

### HTML


```html
<div id="ad">
   <input id="toggle" type="checkbox" checked><label id="toggle-label" for="toggle"></label>
   <div class="box">
      <div class="box-in"><a itemprop="name" href="/"><img src="https://placeholdit.imgix.net/~text?txtsize=35&txt=AD&w=728&h=300"></a></div>
   </div>
</div>
```