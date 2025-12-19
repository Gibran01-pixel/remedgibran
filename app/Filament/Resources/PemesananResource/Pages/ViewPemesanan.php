<?php

namespace App\Filament\Resources\PemesananResource\Pages;

use App\Filament\Resources\PemesananResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\RepeatableEntry;

class ViewPemesanan extends ViewRecord
{
    protected static string $resource = PemesananResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informasi Pemesanan')
                    ->schema([
                        TextEntry::make('pelanggan.nama_pelanggan')
                            ->label('Nama Pelanggan'),

                        TextEntry::make('tanggal_acara')
                            ->label('Tanggal Acara'),

                        TextEntry::make('status')
                            ->label('Status Pemesanan'),
                    ])
                    ->columns(3),

                Section::make('Detail Menu Dipesan')
                    ->schema([
                        RepeatableEntry::make('detailPemesanans')
                            ->schema([
                                TextEntry::make('menu.nama_menu')
                                    ->label('Nama Menu'),

                                TextEntry::make('jumlah')
                                    ->label('Jumlah'),

                                TextEntry::make('subtotal')
                                    ->label('Subtotal')
                                    ->money('IDR'),
                            ])
                            ->columns(3),
                    ]),

                Section::make('Total Harga')
                    ->schema([
                        TextEntry::make('total_harga')
                            ->label('Total Keseluruhan')
                            ->money('IDR'),
                    ]),
            ]);
    }
}
