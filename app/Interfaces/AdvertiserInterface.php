<?php


namespace App\Interfaces;


interface AdvertiserInterface extends TaxableInterface
{
    public function unqiueCodeOfAdvertiser();

    public function calculateTotalPrice();

    public function mappingFileds();

    // Hotel
    public function fieldHotel();
    public function fieldHotelName();
    public function fieldHotelRating();

    // Room
    public function fieldRoom();
    public function fieldRoomCode();
    public function fieldRoomNetAmount();
    public function fieldRoomTotalAmount();

}
