<div class="w-full lg:w-1/3 px-4 mb-8" wire:poll>
    <div>
        <div class="h-full pb-6 rounded shadow-md"><img class="mx-auto mb-4" src="placeholders/pictures/{{$this->style?'female':'male'}}_avatar.svg" alt="">
            <div class="px-8">
                <h3 class="text-xl font-heading font-semibold">{{$this->person}}</h3><span>{{$this->designation}}</span>
                <div class="flex justify-center py-3 my-4 mx-12 border-t border-b"><img class="w-8 h-8 mx-3" src="placeholders/icons/message.svg" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/share.svg" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/star.svg" alt=""></div>
                <p>{{$this->about}}</p>
            </div>
        </div>
    </div>
</div>
