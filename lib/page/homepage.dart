import 'package:flutter/material.dart';
import 'package:introduction_screen/introduction_screen.dart';
import 'package:kamus_indo_turki/page/list_kamus.dart';

class Homepage extends StatelessWidget {
  const Homepage({super.key});

  List<PageViewModel> getPages() {
    return [
      PageViewModel(
          image: Image.asset("image/logo_kamus.png"),
          title: 'Selamat Datang di Aplikasi Kamus Indonesia-Turki',
          body:
          'Aplikasi memudahkan belajar kosakata bahasa indonesia ke bahasa turki')
    ];
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: IntroductionScreen(
        done: const Text(
          "Done",
          style: TextStyle(color: Colors.black),
        ),
        onDone: () {
          Navigator.pushReplacement(
              context, MaterialPageRoute(builder: (context) => ListKamus()));
        },
        showNextButton: false,
        pages: getPages(),
        globalBackgroundColor: Colors.blue,
      ),
    );
  }
}
