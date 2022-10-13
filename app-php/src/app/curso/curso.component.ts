import { CursoService } from './curso.service';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Curso } from './curso';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent implements OnInit {
  url = "http://localhost/api/php/";

  vetor:Curso [] = [];

  curso = new Curso();

  constructor(private curso_Servico:CursoService) { }

  ngOnInit(): void {
    this.selecao();
  }

  cadastro():void{

  }

  selecao():void{
    this.curso_Servico.obterCursos().subscribe(
      (res: Curso []) => {
        this.vetor = res;
        console.log(this.vetor);
      }
    )
  }

  alterar():void{

  }

  remover():void{

  }


}
