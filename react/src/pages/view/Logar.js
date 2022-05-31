import React, { Fragment, useState} from 'react';
import Link from '@material-ui/core/Link'
import {withStyles} from '@material-ui/core/styles';
import {Container} from '@material-ui/core';
import Button from '@material-ui/core/Button'; 
import TextField from '@material-ui/core/TextField';
import Typography from '@material-ui/core/Typography';
import { purple } from '@material-ui/core/colors';
import { useNavigate } from 'react-router-dom';
import http from '../../config/banco';

const CollorButton= withStyles(theme => ({

        root:{
            color: '#ffffff',
            backgroundColor: purple[800],
            '&:hover' : {
                backgroundColor: purple[500]
            }
        }
}))(Button)

export default function Logar() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const navigate = useNavigate();
    async function handleLogin(e) {
      e.preventDefault();
  
      try {
        const response = await http.post('/login', { email, password });
        localStorage.setItem('token', response.data.token);
  
        navigate.push('/usuario/listar');
      } catch (err) {
        alert('Houve alguma falha no login.');
      }
    }
    
    return (

        <div style={{ border: '1px', padding: '7%', backgroundColor: '#e8eaf6', width: '100%', height: '100vh' }} >
            
        <Fragment >
            <div className='container'
                style={{  display: "flex",
                flexDirection: "column",
                alignItems: "center"
                  }}
                  sx={{ justifyContent: 'center', overflowX: 'auto'}} >
                    
            
    
            
           
            <Container component= "main" maxWidth="xs" >
            <div style={{ borderRadius: '20px 20px 20px 20px', border: '1px solid grey', padding: '5px 50px 50px 50px', backgroundColor: 'white', alignContent:'center'}} >
                <div className='mt-3 mt-md-5' >
                    <div className='text-center'>  
                        <img src='buscaqui.png' alt='logo do buscaqui'/>
                        <Typography className='mt-3 font-weight-normal' component="h1" variant= "h6">
                            As suas vendas com os nossos dados
                        </Typography>
                    </div>
        <form onSubmit={handleLogin}>
                <div className='mt-4'>
                        <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        fullWidth
                        id='email'
                        label= "E-mail"
                        name='username'
                        type='email'
                        value={email}
                        onChange={e => setEmail(e.target.value)}
                        />

                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        fullWidth
                        id='password'
                        label= "Senha"
                        name='password'
                        type='password'
                        value={password}
                        onChange={e => setPassword(e.target.value)}
                        />
                        
                        <Button 
                            type= 'submit'
                            variant='contained'
                            fullWidth
                            color='primary'
                            size= 'large'
                            className='mb-3 mb-md-4 mt-4'
                        >
                            Entrar
                        </Button>
                       
                        <Link href='/register'>
                            <CollorButton
                                type='button'
                                fullWidth
                                size='large'
                                variant='contained'
                                className='mt-md-1'
                            >
                            Cadastrar
                            </CollorButton>
                        </Link>

                 
                </div>
                </form>
                </div> 
                </div>
            </Container>
                </div>
          
        
           
       
        </Fragment>
        </div>
    )
}
