import { CursoService } from './curso.service';
import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Curso } from './modelo/curso';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent implements OnInit {

  // Objeto de formulario do tipo Curso
 formulario = new FormGroup({
  nomeCurso : new FormControl(''),
  valorCurso : new FormControl('')
 });

  vetor: Curso[] = [];

  constructor(private curso_servico: CursoService) { }

  ngOnInit(): void {
    this.listar();
  }

  cadastrar() {
    this.curso_servico.cadastrar(this.formulario).subscribe(retorno => {this.vetor.push(retorno)});
  }

  listar() {
    this.curso_servico.listar().subscribe(dados => { this.vetor = dados });
  }


}
