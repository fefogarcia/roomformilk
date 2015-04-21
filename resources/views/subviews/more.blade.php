<div class="row">

	<div class="ten columns offset-by-one">

		<h5>More items</h5>

		<div class="row">

@foreach ($list as $item)

			<div class="four columns">
				<a href="/items/{{ $item->slug }}/"><div class="item-image" style="background-image: url('/images/item-headers/{{ $item->id }}.jpg')">&nbsp;</div></a>
				<h6><a href="/items/{{ $item->slug }}/">{{ $item->headline }}</a></h6>
			</div>

@endforeach

		</div>

	</div>

</div>
