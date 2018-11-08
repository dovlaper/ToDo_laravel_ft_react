<?php

namespace App\Http\Controllers;

use App\Model\Card;
use App\Http\Requests\CreateCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Support\Facades\Log;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::where('user_id',auth()->user()->id )->get();

        return response($cards,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCardRequest $request)
    {
        $card = Card::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'done' => $request['done'],
            'priority' => $request['priority'],
            'user_id' => auth()->user()->id
        ]);

        return response($card, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card )
    {
        if($card->user_id == auth()->user()->id)
        {
            $card->update($request->all());

            return response($card , 200);
        }
        else
        {
            return response($card, 403);
        }
    }

    public function getCard(Card $card){
        if($card->user_id == auth()->user()->id)
        {
            return response($card,200);
        }
        else
        {
            return response($card, 403);
        }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        if($card->user_id == auth()->user()->id)
        {
            $card->delete();

            return response($card,200);
        }
        else
        {
            return response($card, 403);
        }
    }
}
