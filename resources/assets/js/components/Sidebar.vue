<template>
	<div class="sidebar">
		<div class="social">
			<button v-on:click="openPage(editorPage)" id="editorPage" class="postmaker-logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
					<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
				</svg>
			</button>
			<button id="facebookPage"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></button>
			<button id="twitterPage"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-medium fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-tumblr fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-wordpress fa-2x" aria-hidden="true"></i></button>
			<button><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></button>
		</div>
	</div>
</template>

<script>
	export default{
		name: 'Sidebar',

	}	
</script>