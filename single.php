<?php
    $post = get_post();
	$post_id = $post->ID;
	$authorId = $post->post_author;
	$components = get_field('post_content');
	$avatar = get_avatar_url($authorId, 96);
	$author_name = get_the_author_meta('first_name', $authorId);
	$author_nick = get_the_author_meta('nickname', $authorId);
	$author_position = get_the_author_meta('last_name', $authorId);
?>
<?php get_header(); ?>
<main class="post__page w-full">
	<section class="w-full min-h-[50vh] bg-dark-background flex items-center px-28">
		<div class="post__content__container w-7/12">
			<p class="text-white  text-6xl min-w-fit"><?php the_title()?></p>
			<div class="post__author__container flex">
				<div class="user__container mt-10 flex">
					<img src="<?php echo $avatar?>" alt="user avatar" class="rounded-full mr-6">
					<div class="author__name__container w-full flex flex-col justify-center relative">
						<p class="text-white font-bold mb-0">By <?php echo $author_name?>, <?php echo $author_nick ?></p>
						<p class="text-white"><?php echo $author_position?></p>
						<a class="
						absolute flex justify-center items-center
						font-bold rounded-full -bottom-3 border border-white
						border-solid w-6 h-6 text-center text-white
						text-xs
						" href="">in</a>
					</div>
				</div>
			</div>
		</div>
		<div class="w-5/12 flex">
			<img class=" max-w-lg" src="<?php the_field('post_hero_image')?>" alt="post descriptive image">
		</div>
	</section>
	<section class="post__description w-full pt-20">
		<p class="text-center text-gray-400 mx-auto"><?php echo get_the_date('F j, Y')?></p>
		<h2 class="text-3xl mx-auto max-w-lg text-center text-gray-header leading-snug tracking-wide mt-6"><?php the_field('post_description')?></h2>
	</section>
	<section class="article__body w-full flex px-14">
		<aside class="sticky w-[280px] top-[20%] h-fit ">
			<p class="font-bold">Contents</p>
			<div class="content__option__container w-full flex flex-col">
				<a href="#" class="w-full pl-4 py-1 bg-gray-300">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
				<a href="#" class="w-full pl-4 py-1">Lorem Ipsum</a>
			</div>
		</aside>
		<article class="flex-1 flex justify-center">
			<div class="content__container">
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quis iure nemo! Nemo sit hic id exercitationem quae quos aut tenetur ut numquam quisquam est illum maxime itaque, unde nam?</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
				<p>	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut possimus, facilis, nam praesentium numquam iure exercitationem vitae labore ratione cumque pariatur officiis reprehenderit sunt libero recusandae veritatis suscipit, repellat dolorem.</p>
			</div>
		</article>
		<aside class="sticky w-[280px] top-0">other articles</aside>
	</section>
</main>

<?php get_footer(); ?>