<div>
    <div class="reveal" id="product-review-modal" data-reveal>
        <div>
           <review-form
           :product="{{$product}}"
           url="{{route('review.store')}}"
           >

           </review-form>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>