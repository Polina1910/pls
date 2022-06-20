<footer>
	<div class="container">
		<div class="footer-inner">

			<div class="footer-inner-link">
				<a href="{{ Lang::link('/') }}">
					<svg width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.9512 -6.57566e-06C17.6313 0.0109159 17.3234 0.123838 17.0723 0.322259L2.85938 11.5195C1.05548 12.9412 0 15.1135 0 17.4102V36.5C0 37.8636 1.13641 39 2.5 39H12.5C13.8636 39 15 37.8636 15 36.5V26.5C15 26.2049 15.205 26 15.5 26H20.5C20.795 26 21 26.2049 21 26.5V36.5C21 37.8636 22.1364 39 23.5 39H33.5C34.8636 39 36 37.8636 36 36.5V17.4102C36 15.1135 34.9445 12.9412 33.1406 11.5195L18.9277 0.322259C18.6503 0.103134 18.3045 -0.0109978 17.9512 -6.57566e-06ZM18 3.41015L31.2852 13.8769C32.3693 14.7313 33 16.0308 33 17.4102V36H24V26.5C24 24.585 22.415 23 20.5 23H15.5C13.585 23 12 24.585 12 26.5V36H3V17.4102C3 16.0308 3.63074 14.7313 4.71484 13.8769L18 3.41015Z" fill="#059F97"/>
					</svg>												
				</a>
			</div>

			<div class="footer-inner-link">
				<a href="{{ Lang::link('/catalog') }}">
					<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.83973 8.97214H2.56099C1.14899 8.97214 0 7.87565 0 6.52781V2.444C0 1.09633 1.14882 0 2.56099 0H6.83973C8.25173 0 9.40038 1.09633 9.40038 2.444V6.52781C9.40004 7.87549 8.25138 8.97197 6.83939 8.97197L6.83973 8.97214ZM2.56099 0.909247C1.67419 0.909247 0.9529 1.59768 0.9529 2.44392V6.52773C0.9529 7.37413 1.67419 8.06256 2.56099 8.06256H6.83973C7.72636 8.06256 8.44765 7.37413 8.44765 6.52773L8.44748 2.44392C8.44748 1.59768 7.72619 0.909247 6.83956 0.909247H2.56099Z" fill="#059F97"/>
						<path d="M17.4393 8.97214H13.1606C11.7486 8.97214 10.5996 7.87565 10.5996 6.52781V2.444C10.5996 1.09633 11.7484 0 13.1606 0H17.4393C18.8513 0 20 1.09633 20 2.444V6.52781C20.0001 7.87549 18.8515 8.97197 17.4393 8.97197V8.97214ZM13.1606 0.909247C12.2738 0.909247 11.5525 1.59768 11.5525 2.44392V6.52773C11.5525 7.37413 12.2738 8.06256 13.1606 8.06256H17.4393C18.326 8.06256 19.0473 7.37413 19.0473 6.52773V2.44392C19.0473 1.59768 18.326 0.909247 17.4393 0.909247H13.1606Z" fill="#059F97"/>
						<path d="M17.0741 19.0005H12.7954C11.3834 19.0005 10.2344 17.904 10.2344 16.5561V12.4723C10.2344 11.1246 11.3832 10.0283 12.7954 10.0283H17.0741C18.4861 10.0283 19.6347 11.1246 19.6347 12.4723V16.5561C19.6347 17.9036 18.4861 19.0003 17.0741 19.0003V19.0005ZM12.7954 10.9376C11.9086 10.9376 11.1873 11.626 11.1873 12.4722V16.5561C11.1873 17.4025 11.9086 18.0909 12.7954 18.0909H17.0741C17.9607 18.0909 18.682 17.4025 18.682 16.5561L18.6818 12.4722C18.6818 11.626 17.9605 10.9376 17.0739 10.9376H12.7954Z" fill="#059F97"/>
						<path d="M6.83973 19.0005H2.56099C1.14899 19.0005 0 17.904 0 16.5561V12.4723C0 11.1246 1.14882 10.0283 2.56099 10.0283H6.83973C8.25173 10.0283 9.40038 11.1246 9.40038 12.4723V16.5561C9.40004 17.9036 8.25138 19.0003 6.83939 19.0003L6.83973 19.0005ZM2.56099 10.9376C1.67419 10.9376 0.9529 11.626 0.9529 12.4722V16.5561C0.9529 17.4025 1.67419 18.0909 2.56099 18.0909H6.83973C7.72636 18.0909 8.44765 17.4025 8.44765 16.5561L8.44748 12.4722C8.44748 11.626 7.72619 10.9376 6.83956 10.9376H2.56099Z" fill="#059F97"/>
					</svg>				
				</a>
			</div>

			<div class="footer-inner-link">
				<div onclick="open_cart_modal()" class="header-icons-buy-link">
					<div class="header-icons-circle">{{ $cartCount }}</div>
					<svg class="header-icons-buy" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_284_14486)">
						<path d="M6.80625 14.2911H6.80722C6.80802 14.2911 6.80883 14.2909 6.80963 14.2909H18.0305C18.3068 14.2909 18.5496 14.1017 18.6256 13.8275L21.1011 4.8835C21.1545 4.69067 21.1171 4.48338 21.0003 4.32333C20.8832 4.16328 20.7003 4.06912 20.5061 4.06912H5.37892L4.93651 2.01395C4.87349 1.72163 4.62238 1.51367 4.33228 1.51367H0.618896C0.277053 1.51367 0 1.79966 0 2.15253C0 2.5054 0.277053 2.79139 0.618896 2.79139H3.83587C3.9142 3.15558 5.95301 12.6264 6.07034 13.1712C5.4126 13.4664 4.95117 14.1433 4.95117 14.9298C4.95117 15.9865 5.7841 16.8463 6.80786 16.8463H18.0305C18.3724 16.8463 18.6494 16.5603 18.6494 16.2075C18.6494 15.8546 18.3724 15.5686 18.0305 15.5686H6.80786C6.46666 15.5686 6.18896 15.282 6.18896 14.9298C6.18896 14.578 6.4657 14.2919 6.80625 14.2911ZM19.6856 5.34684L17.5636 13.0132H7.30427L5.65388 5.34684H19.6856Z" fill="#059F97"/>
						<path d="M6.18896 18.7633C6.18896 19.82 7.0219 20.6798 8.04565 20.6798C9.06941 20.6798 9.90234 19.82 9.90234 18.7633C9.90234 17.7065 9.06941 16.8467 8.04565 16.8467C7.0219 16.8467 6.18896 17.7065 6.18896 18.7633ZM8.04565 18.1244C8.38685 18.1244 8.66455 18.4111 8.66455 18.7633C8.66455 19.1155 8.38685 19.4021 8.04565 19.4021C7.70446 19.4021 7.42676 19.1155 7.42676 18.7633C7.42676 18.4111 7.70446 18.1244 8.04565 18.1244Z" fill="#059F97"/>
						<path d="M14.936 18.7633C14.936 19.82 15.769 20.6798 16.7927 20.6798C17.8165 20.6798 18.6494 19.82 18.6494 18.7633C18.6494 17.7065 17.8165 16.8467 16.7927 16.8467C15.769 16.8467 14.936 17.7065 14.936 18.7633ZM16.7927 18.1244C17.1339 18.1244 17.4116 18.4111 17.4116 18.7633C17.4116 19.1155 17.1339 19.4021 16.7927 19.4021C16.4515 19.4021 16.1738 19.1155 16.1738 18.7633C16.1738 18.4111 16.4515 18.1244 16.7927 18.1244Z" fill="#059F97"/>
						</g>
						<defs>
						<clipPath id="clip0_284_14486">
						<rect width="21.125" height="21.8065" fill="white" transform="translate(0 0.193359)"/>
						</clipPath>
						</defs>
					</svg>						
				</div>
			</div>

			<div class="footer-inner-link">
				<a href="{{ Lang::link('/user/wished') }}">
					<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.99998 16.9986C8.74373 16.9986 8.49667 16.9058 8.30414 16.7371C7.57698 16.1013 6.87592 15.5038 6.25739 14.9767L6.25423 14.974C4.4408 13.4286 2.87484 12.094 1.78527 10.7794C0.567305 9.30968 0 7.9162 0 6.39391C0 4.91487 0.507155 3.55037 1.42795 2.55157C2.35972 1.54097 3.63825 0.984375 5.02843 0.984375C6.06746 0.984375 7.01901 1.31287 7.85658 1.96065C8.27928 2.28763 8.66243 2.68781 8.99998 3.15459C9.33767 2.68781 9.72068 2.28763 10.1435 1.96065C10.9811 1.31287 11.9326 0.984375 12.9717 0.984375C14.3617 0.984375 15.6404 1.54097 16.5722 2.55157C17.4929 3.55037 18 4.91487 18 6.39391C18 7.9162 17.4328 9.30968 16.2148 10.7792C15.1253 12.094 13.5594 13.4285 11.7463 14.9737C11.1267 15.5016 10.4245 16.1001 9.69569 16.7374C9.50329 16.9058 9.2561 16.9986 8.99998 16.9986ZM5.02843 2.03879C3.93626 2.03879 2.93293 2.47467 2.20303 3.26624C1.46228 4.06975 1.05427 5.18047 1.05427 6.39391C1.05427 7.67422 1.53012 8.81927 2.59703 10.1066C3.62823 11.3509 5.16205 12.658 6.93799 14.1715L6.94129 14.1743C7.56215 14.7034 8.26596 15.3033 8.99847 15.9438C9.73538 15.302 10.4403 14.7012 11.0624 14.1713C12.8382 12.6578 14.3719 11.3509 15.4031 10.1066C16.4698 8.81927 16.9457 7.67422 16.9457 6.39391C16.9457 5.18047 16.5377 4.06975 15.7969 3.26624C15.0672 2.47467 14.0637 2.03879 12.9717 2.03879C12.1716 2.03879 11.437 2.29312 10.7884 2.79465C10.2104 3.24179 9.80775 3.80704 9.57168 4.20255C9.45028 4.40593 9.2366 4.52733 8.99998 4.52733C8.76336 4.52733 8.54968 4.40593 8.42828 4.20255C8.19235 3.80704 7.7897 3.24179 7.21155 2.79465C6.56295 2.29312 5.82837 2.03879 5.02843 2.03879Z" fill="#059F97"/>
					</svg>	
				</a>
			</div>

			<div class="footer-inner-link">
				<a 
					@if($is_user_login)
						href="{{ Lang::link('/user') }}" 					
					@else
						onclick="open_login_modal()" 
					@endif 
					class="header-icons-user-link"
				>
					<svg class="header-icons-user" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.5995 12.734C15.583 11.7174 14.373 10.9649 13.0528 10.5094C14.4667 9.53552 15.3957 7.90572 15.3957 6.06283C15.3957 3.08757 12.9751 0.666992 9.99984 0.666992C7.02458 0.666992 4.604 3.08757 4.604 6.06283C4.604 7.90572 5.53293 9.53552 6.94689 10.5094C5.62673 10.9649 4.41675 11.7174 3.40019 12.734C1.63735 14.4968 0.666504 16.8406 0.666504 19.3337H2.12484C2.12484 14.9914 5.65754 11.4587 9.99984 11.4587C14.3421 11.4587 17.8748 14.9914 17.8748 19.3337H19.3332C19.3332 16.8406 18.3623 14.4968 16.5995 12.734ZM9.99984 10.0003C7.82871 10.0003 6.06234 8.23399 6.06234 6.06283C6.06234 3.89166 7.82871 2.12533 9.99984 2.12533C12.171 2.12533 13.9373 3.89166 13.9373 6.06283C13.9373 8.23399 12.171 10.0003 9.99984 10.0003Z" fill="#059F97"/>
						<line x1="1.3335" y1="18.583" x2="18.6668" y2="18.583" stroke="#059F97" stroke-width="1.5"/>
					</svg>						
				</a>
			</div>

		</div>
	</div>
</footer>

<x-modals.error />

<x-modals.callback />
<x-modals.cart />

<x-modals.login />
<x-modals.register />
<x-modals.forgot />

<x-inc.chatbtn />


<div id="loader">
	<svg  width="40" height="40" viewBox="0 0 50 50">
		<path fill="#black" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
			<animateTransform attributeType="xml"
				attributeName="transform"
				type="rotate"
				from="0 25 25"
				to="360 25 25"
				dur="0.6s"
				repeatCount="indefinite"/>
		</path>
	</svg>
</div>

@desktopcss

<style>

	footer {
		background: var(--color-back-and-stroke);
		padding: 50px 0;
		display: flex;
		width: 100%;
		position: sticky;
		bottom: 100px;
		left: 0;
		z-index: 10000;
	}

	.footer-inner {
		display: flex;
		justify-content: space-between;
	}

	.made, .copyright {
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 24px;
		white-space: break-spaces;
	}

	.made{
		display: block; 
		margin: 17px 0 15px;
		transition: .3s;
	}

	.made:hover{
		color: #51225D;
	}

	.footer-col {
		display: flex;
		flex-direction: column;
	}

	.footer-col-last {
		align-items: flex-end;
	}

	.footer-link {
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 28px;
		margin-bottom: 10px;
		transition: .3s;
	}

	.footer-link:hover{
		color: var(--color-second);
	}

	.footer-contact-link {
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 26px;
		margin-bottom: 4px;
	}

	.footer-social {
		display: flex;
		align-items: center;
		margin-top: 25px;
	}

	.footer-social-link {
		margin-left: 10px;
		border-radius: 50%;
	}

	.footer-social-image {
		width: 32px;
		height: 32px;
		transition: .3s;
	}

	.footer-social-image:hover {
		filter: hue-rotate(-10deg);
	}

</style>

@mobilecss

<style>

	footer {
		background: var(--color-back-and-stroke);
		padding: 13px 15px;
		display: flex;
		width: 100%;
		position: sticky;
		bottom: 0px;
		left: 0;
		z-index: 10000;
		height: 46px;
	}

	.footer-inner {
		display: flex;
		justify-content: space-between;
		width: 280px;
	}

	.footer-inner-link svg {
		width: 20px;
		height: 20px;
	}

	.header-icons-buy {
		width: 26px;
		height: 26px;
	}
	
	footer .logo {
		width: 130px;
		height: 56px;
	}

	.made, .copyright {
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		line-height: 20px;
		white-space: break-spaces;
	}

	.made{
		display: block; 
		margin: 20px 0 9px;
	}

	.footer-col {
		display: flex;
		flex-direction: column;
		margin-bottom: 30px;
	}

	.footer-col:nth-child(1){
		order: 1;
	}
	
	.footer-col:nth-child(5){
		order: 2;
	}

	.footer-col:nth-child(4){
		order: 3;
	}

	.footer-col:nth-child(2){
		order: 4;
	}

	.footer-col:nth-child(3){
		order: 4;
		margin-bottom: 0;
	}

	.footer-col-last {
		align-items: flex-start;
	}

	.footer-link {
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 24px;
		margin-bottom: 10px;
	}

	.footer-contact-link {
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 20px;
		margin-bottom: 6px;
	}

	.footer-social {
		display: flex;
		align-items: center;
		margin-top: 20px;
	}

	.footer-social-link {
		margin-right: 10px;
		border-radius: 50%;
	}

	.footer-social-image {
		width: 35px;
		height: 35px;
		transition: .3s;
	}

</style>

@endcss


@js('0')

<script>

	const $ = function(selector) {

		if (! (this instanceof $) ) {
			return new $(selector);
		}

		if (typeof selector=="object") 
			this.el = [selector]; 
		else 
			this.el = document.querySelectorAll(selector);
		
		return this;
	}

	$.prototype.css = function(prop, val) {
		this.el.forEach(function(element) {
			element.style[prop] = val;
		});
		return this;
	}

	$.prototype.display = function (name){
		this.el.forEach(function(el){
			el.style.display = name
		});
		return this;
	}

	$.prototype.on = function (event, f){
		this.el.forEach(function(el){
			el.addEventListener(event, f)
		});
		return this;
	}

	$.prototype.fadein = function (){
		this.el.forEach(function(el){
			el.classList.add('active')
		});
		return this;
	}

	$.prototype.fadeout = function (){
		this.el.forEach(function(el){
			el.classList.remove('active')
		});
		return this;
	}

	$.prototype.toggleClass = function (classname){
		this.el.forEach(function(el){
			el.classList.toggle(classname)
		});
		return this;
	}

	$.prototype.addClass = function (classname){
		this.el.forEach(function(el){
			el.classList.add(classname)
		});
		return this;
	}

	$.prototype.removeClass = function (classname){
		this.el.forEach(function(el){
			el.classList.remove(classname)
		});
		return this;
	}

	$.prototype.slideUp = function (){
		this.el.forEach(function(el){
			el.style.transition = "all .5s ease-in-out"
			el.style.height = "0px"
			el.setAttribute('data-height',el.offsetHeight)
		});
		return this;
	}

	$.prototype.slideDown = function (){
		this.el.forEach(function(el){
			el.style.transition = "all .5s ease-in-out"
			el.style.height = el.getAttribute('data-height') ?? 'auto'
		});
		return this;
	}

	$.prototype.toggleSlide = function (){
		this.el.forEach(function(el,index){
			el.style.transition = "all 1s ease-in-out"
			console.log(el.offsetHeight);
			if(el.offsetHeight==0) {
				el.style.height = el.getAttribute('data-height') ?? 'auto'
			} else {
				el.style.height = "0px"
				el.setAttribute('data-height',el.offsetHeight)
			}
		});
		return this;
	}

	$.prototype.parent = function (){
		var els = this.el;
		var parents = []
		els.forEach(function(el, index) {
			parents[index] = el.parentElement
		})
		this.el = parents
		return this;
	}

	$.prototype.child = function (){
		var els = this.el;
		var childs = []
		els.forEach(function(el, index) {
			childs[index] = el.firstElementChild
		})
		this.el = childs
		return this;
	}

	$.prototype.val = function(val){
		if ( val !== undefined && val !== null )
			this.el.forEach(function(el, index) {
				el.value = val
			})
	
		return this.el[0].value;
	}

	$.prototype.data = function(attr, val){
		if (val !== undefined && val !== null )
			this.el[0].setAttribute('data-'+attr, val)
		
		return this.el[0].getAttribute('data-'+attr)
	}

	$.prototype.attr = function(attr, val){
		if (val !== undefined && val !== null )
			this.el[0].setAttribute(attr, val)
		
		return this.el[0].getAttribute(attr)
	}

	$.prototype.html = function(html){
		if (html !== undefined && html !== null)
			this.el[0].innerHTML = html
		return this.el[0].innerHTML;
	}

	$.prototype.text = function(text){
		if(text !== undefined && text !== null)
			this.el[0].innerText = text
		return this.el[0].innerText;
	}

	$.prototype.height = function(){
		return this.el[0].offsetHeight
	}

	// document.addEventListener('DOMContentLoaded', function(){

		// lazy load START
			/**
			 * Usage: <img srcset="/images/lazy.svg" src="/images/original.png" alt="">
			 */
			function check_lazy() {
				for (var i = lazy_imgs.length - 1; i >= 0; i--) {
					var img = lazy_imgs[i]
					if (img.srcset == '/images/lazy.svg' && img.getBoundingClientRect().top - 100 < window.innerHeight) {
						(function(img) {
							img.onload = () => {
								img.removeAttribute('srcset')
							}
						})(img)
						img.srcset = img.src
					}
				}
			}
			var lazy_imgs = []
			window.addEventListener('DOMContentLoaded', () => {
				lazy_imgs = Array.prototype.slice.call(document.querySelectorAll('img[srcset]'))
				setTimeout(() => {
					check_lazy()
				}, 200)
			})
			window.addEventListener('scroll', () => {
				check_lazy()
			})
		// lazy load END


		function scrollIt(destination, duration = 500, easing = 'easeInOutCubic', callback) {

			const easings = {
				easeInOutCubic(t) {
					return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
				},
			};

			const start = window.scrollY;
			const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

			const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
			const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
			const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop;
			const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);

			if ('requestAnimationFrame' in window === false) {
				window.scroll(0, destinationOffsetToScroll);
				if (callback) {
					callback();
				}
				return;
			}

			function scroll() {
				const now = 'now' in window.performance ? performance.now() : new Date().getTime();
				const time = Math.min(1, ((now - startTime) / duration));
				const timeFunction = easings[easing](time);
				window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));

				if (Math.abs(window.scrollY - destinationOffsetToScroll) < 2) {
					if (callback) {
						callback();
					}
					return;
				}

				requestAnimationFrame(scroll);
			}

			scroll();
		}


		// ajax request START
			let load_count = 0
			const loader = document.getElementById('loader')

			const serialize = function(obj, prefix) {
				var str = [], p;
				for (p in obj) {
					if (obj.hasOwnProperty(p)) {
					var k = prefix ? prefix + "[" + p + "]" : p,
						v = obj[p];
						str.push((v !== null && typeof v === "object") ?
						serialize(v, k) :
						encodeURIComponent(k) + "=" + encodeURIComponent(v));
					}
				}
				return str.join("&");
			}

			const formdata = function(obj) {

				let formData = new FormData()

				for (const i in obj) {

					formData.append(i, obj[i])
				}

				return formData
			}

			async function post(endpoint, obj, is_file = false, is_loader = true) {
									
				try {

					if (is_loader && loader) {
						load_count++
						loader.classList.add('active')
						// document.dispatchEvent(new CustomEvent('loading', { 'detail': load_count }))
					}

					const url = endpoint

					let headers = {
						'Accept': 'application/json',
						'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
					}

					if (!is_file) {

						// headers['Content-Type'] = 'multipart/form-data'

						var response = await fetch(url, {
							method: 'POST',
							headers: headers,
							body: formdata(obj)
						})

					} else {

						headers['Content-Type'] = 'application/x-www-form-urlencoded'

						var response = await fetch(url, {
							method: 'POST',
							headers: headers,
							body: serialize(obj)
						})
					}
					
					let json = []

					try {

						json = await response.json()

					} catch (error) {}

					if (is_loader && loader) {
						load_count--
						if (load_count == 0)
							loader.classList.remove('active')
						// document.dispatchEvent(new CustomEvent('loading', { 'detail': load_count }))
					}

					if (!json.data) {
						return {
							success: false,
							message: "Fatal error",
							data: json,
						}
					}

					return json

				} catch (error) {

					console.error(error)
				}

				return {success: false, message: "Fatal error", data: {}}
			}
		// ajax request END
		
	// })
</script>

<script>


	function resize () {
        document.body.style.setProperty('--width', document.body.clientWidth)
    }
    resize()
    window.addEventListener('resize', resize)

	if ($('.first-header').el[0])
		$('.body-wrapper').css('min-height', 'calc( 100vh - '+$('footer').height()+'px - '+$('header').height()+'px - '+$('.first-header').height()+'px)')

		
	async function user_logout(){

		const response = await post('/api/logout', {}, true, true);
	
		if (lang)
			document.location.href = lang;
		else 
			document.location.href = '/';

	}

	const Cart = new function() {

		this.add = async(id_product, count, attributes = '') => {

			is_checkout = window.location.href.indexOf("checkout") !== -1

			delivery = ''

			if (is_checkout) {
				delivery = $('input[name="delivery"]:checked').val()
			}

			const response = await post(lang + '/api/add-to-cart', {
				id_product: id_product,
				count: count,
				is_checkout: is_checkout,
				attributes: attributes,
				delivery: delivery,
			})

			if (!response.success) {
				alert('Ошибка')
				return
			}

			$('#mini-cart').html(response.data.minicart)
			$('.header-icons-circle').text(response.data.cart_count)
			$('#mini-cart-price').text(response.data.cart_total)

			if (!is_checkout)
				open_cart_modal();
			else {
				$('#checkout-cart').html(response.data.checkout_cart);
			}

			if (response.data.cart_total > 0){
				$('#checkout-submit').css('display', 'flex')
				$('#cart-submit').css('display', 'flex')
			} else {
				$('#checkout-submit').css('display', 'none')
				$('#cart-submit').css('display', 'none')
			}

		}
	}

	const Saved = new function() {


		this.toggle = async(elm, id_product) => {

			const response = await post('/api/saved', {
				id_product: id_product,
			}, false, false)

			if (response.success) {
				if (response.data.status) {
					elm.classList.add('active')
				} else {
					elm.classList.remove('active')
				}
				if (elm.classList.contains('delete-wished-product') || elm.classList.contains('wished-clear')) {
					location.reload();
				}
				return
			} else {
				open_error_modal()
			}

		}

		this.clear = async() => {
			const response = await post('/api/saved/clear', {})

			if (response.success) {
				location.reload();
			} 
		}

	}

</script>


@endjs

{!! JSAssembler::get() !!}
