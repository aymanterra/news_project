@extends('errors::layout')

@section('title', 'Unauthorized')

@section('message', $exception->getMessage() )
