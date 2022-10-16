import { HttpClient, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators'
import { Observable } from 'rxjs/'
import { FormGroup } from '@angular/forms';
import { Curso } from './modelo/curso';

@Injectable({
  providedIn: 'root'
})
export class CursoService {
  url:string = "http://localhost:80/api/php/";

  vetor:Curso[] = [];

  constructor(private http:HttpClient) { }

  cadastrar(f: FormGroup){
    console.log(f.value);
    return this.http.post<Curso>('http://localhost:80/api/php/cadastrar',f.value);
  }

  listar(){
    return this.http.get<Curso[]>('http://localhost:80/api/php/listar');
  }
}
