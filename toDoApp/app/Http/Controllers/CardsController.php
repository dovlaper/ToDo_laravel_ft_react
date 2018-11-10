<?php

namespace App\Http\Controllers;

use App\Model\Card;
use App\Http\Requests\CreateCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;


class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::where('user_id', auth()->user()->id)->get();

        return response($cards, Response::HTTP_OK);
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

        return response($card, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        if($card->user_id == auth()->user()->id) {
            $card->update($request->all());

            return response($card, Response::HTTP_OK);
        }
        else {
            return response($card, Response::HTTP_FORBIDDEN);
        }
    }

    public function getCard(Card $card)
    {
        if($card->user_id == auth()->user()->id) {
            return response($card, Response::HTTP_OK);
        }
        else {
            return response($card, Response::HTTP_FORBIDDEN);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        if($card->user_id == auth()->user()->id) {
            $card->delete();

            return response($card, Response::HTTP_OK);
        }
        else {
            return response($card, Response::HTTP_FORBIDDEN);
        }
    }
}
