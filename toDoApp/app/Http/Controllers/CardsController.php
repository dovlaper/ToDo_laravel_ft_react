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
        return auth()->user()->cards;
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

        return response($card, Response::HTTP_CREATED);
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
        $card->update($request->only([
            'title',
            'content'
        ]));

        return $card;
    }

    public function getCard(Card $card)
    {
        return $card;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return response($card, Response::HTTP_OK);
    }
}
