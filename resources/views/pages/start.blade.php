@extends('site')



@section('header')

	

@endsection



@section('main')



	<section class="sectionOne">

		<div class="columns is-gapless">



			<div class="column is-4">

				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, perferendis explicabo, animi mollitia aliquam qui ipsam similique eum recusandae laboriosam neque pariatur alias odit. Consequatur voluptatum eaque molestias optio aliquid quod doloremque, odit deleniti velit labore?

			</div>



			<div class="column is-4">

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempore, ipsum eius magnam distinctio? Quo nulla, illo accusamus minus obcaecati, totam quas, quidem nostrum dolores similique cupiditate numquam, aliquid natus ex sequi perferendis labore unde iusto!

			</div>



			<div class="column is-4">

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempore, ipsum eius magnam distinctio? Quo nulla, illo accusamus minus obcaecati, totam quas, quidem nostrum dolores similique cupiditate numquam, aliquid natus ex sequi perferendis labore unde iusto!

			</div>



		</div>

	</section>



	<section class="sectionTwo">

		<div class="columns">



			<div class="column is-8">

				<h4 class="is-size-4">Welcome Page</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sapiente pariatur, nostrum consequuntur natus assumenda hic alias, doloribus iure, aut quisquam labore accusamus aliquam quasi commodi quas dignissimos, placeat sit! Eligendi iste facere nihil excepturi ipsa aut laboriosam explicabo itaque ullam maxime alias aliquid illo saepe error minima fugiat, ducimus consequatur, impedit iusto quisquam. Facere ea, sed cumque ullam, minima inventore deleniti nulla iste iusto, at animi, rerum obcaecati. Tenetur, debitis, necessitatibus voluptatibus ullam, quos, quaerat aliquam a eos dolorum unde cumque! Suscipit perferendis quas non est ex reprehenderit quis, impedit quam labore aperiam atque, vero ullam in ducimus cum natus? Facilis voluptas ducimus enim unde dignissimos nulla. Assumenda est, recusandae error voluptatem ipsa officia natus quidem autem quibusdam minima.</p>

			</div>



			<div class="column is-4">
				
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, dolorem. Veniam maxime voluptate fugit itaque placeat aut quibusdam ad, sapiente tenetur, ea, dolores doloribus officiis vel unde perspiciatis nihil fugiat reprehenderit, facilis hic! Dolorem consectetur optio dolorum nostrum odit, maxime fugit qui. "" 

			</div>



		</div>

	</section>



	<section class="sectionTwo">

		<div class="columns">



			<div class="column is-4">
				
				@component('components.article-list')@endcomponent

			</div>



			<div class="column is-4">
				
				@component('components.posts-list')@endcomponent
				
			</div>



			<div class="column is-4">
				
				@component('components.news-list')@endcomponent
				
			</div>



		</div>

	</section>



@endsection