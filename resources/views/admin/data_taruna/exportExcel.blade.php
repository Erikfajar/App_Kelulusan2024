<table>
  <thead>
  <tr>
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">No</th> <!-- kolom A -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">NISN</th> <!-- kolom B -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">NIT</th> <!-- kolom C -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Nama</th> <!-- kolom D -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Kelas</th> <!-- kolom E -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Kompetensi Keahlian</th> <!-- kolom F -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Keterangan</th> <!-- kolom F -->
      <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Catatan</th> <!-- kolom F -->
  </tr>
  </thead>
  <tbody>
  @php $no=1; @endphp
  @if(count($data))
  @foreach($data as $dt)
  <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $dt->nisn ?? '' }}</td>
      <td>{{ $dt->nit ?? '' }}</td>
      <td>{{ $dt->nama ?? '' }}</td>
      <td>{{ $dt->kelas ?? '' }}</td>
      <td>{{ $dt->kompetensi_keahlian ?? '' }}</td>
      <td>{{ $dt->keterangan ?? '' }}</td>
      <td>{{ $dt->catatan ?? '' }}</td>
  </tr>
  @endforeach
  @endif
  </tbody>
</table>