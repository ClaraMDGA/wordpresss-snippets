<div class="my-sm-share">
  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
    <img src="/wp-content/uploads/2022/12/fb.svg">
  </a>

  <a target="_blank" href="https://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
    <img src="/wp-content/uploads/2022/12/tt.svg">
  </a>

  <a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>">
    <img src="/wp-content/uploads/2022/04/wa.svg">
  </a>

  <a target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>">
    <img src="/wp-content/uploads/2022/12/tg.svg">
  </a>

  <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">
    <img src="/wp-content/uploads/2022/12/ld.svg">
  </a>
	
  <a target="_blank" href="mailto:?subject=<?php the_title();?>&body=<?php the_permalink(); ?>">
    <img src="/wp-content/uploads/2022/12/mail.svg">
  </a>
	
</div>

<style>
.my-sm-share {
	list-style:none;
  	padding-left:0;
    display:flex;
    justify-content:flex-start;
    width:100%;
  	margin:0;
}
.my-sm-share a {
	width:36px;
  	height:36px;
  	display:flex;
  	justify-content:center;
 	align-items:center;
	margin:3px 8px;
  	border-radius:50%;
  	cursor:pointer;
  	background-color:#333333;
}
.my-sm-share img,.my-sm-share img svg {
   /*filter: brightness(0) invert(1);*/
   height:18px!important;
   margin-top:0px;
   width:auto!important;
}

.my-sm-share li:hover img {
	opacity:.8;
}
</style>
