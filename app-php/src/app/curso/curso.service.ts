import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators'
import { Observable } from 'rxjs/'
import { Curso } from './curso';

@Injectable({
  providedIn: 'root'
})
export class CursoService {
  url:string = "http://localhost:80/api/php/";

  vetor:Curso[] = [];

  constructor(private http:HttpClient) { }


  //Observable -> permite listar todos os componentes, pegando lá do PHP todas as linhas e em cada linha teremos acesso as colunas
   obterCursos():Observable<Curso[]>{
    return this.http.get(this.url+"listar.php").pipe(
      map((res: any) => {
        console.log(res);
        this.vetor = res['cursos'];
        return this.vetor;
      })
    )
  }

  /* obterCursos():Observable<Curso[]>{
    return this.http.get<Curso[]>(`${this.url}listar.php`);
  }*/

  cadastrarCurso(c:Curso): Observable<Curso[]>{
    return this.http.post(this.url+'cadastrar',{cursos:c})
    .pipe(map((res:any) => {
      this.vetor.push(res['cursos']);
      return this.vetor;
    }))
  }
}
