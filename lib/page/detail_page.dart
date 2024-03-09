import 'package:flutter/material.dart';
import 'package:kamus_indo_turki/model/listdirectiory_model.dart';

class DetailKamus extends StatelessWidget {
  final Result? data;

  const DetailKamus(this.data, {super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(data!.kataTurki),
        backgroundColor: Colors.blue[100],
      ),
      body: ListView(
        children: [
          ListTile(
            title: Text(
              data?.kataTurki ?? "",
              style: TextStyle(fontWeight: FontWeight.bold, fontSize: 16),
            ),
            subtitle: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text("Kata Indonesia: ${data?.kataIndonesia}"),
                Text("Jenis Kata: ${data?.jenisKata}"),
                Text("Contoh Penggunaan: ${data?.contohPenggunaan}"),
                Text(
                    "Contoh Penggunaan Turki: ${data?.contohPenggunaanTurki}"),
                Text("Keterangan: ${data?.keterangan}"),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
