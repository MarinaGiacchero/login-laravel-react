import { actionTypes } from "../Action/auth.action";
import exportedObject from "./initialState";

const authReducer = (state= exportedObject.auth, action) =>{
    switch (action.type){
        case actionTypes.CHANGE:
            return{
                ...state,
                credentials:{

                        ...state.credentials.username,
                        ...state.credentials.password,
                        ...action.payload
                    }}

                case actionTypes.GET_TOKEN:
                    return{
                        ...state,
                        ...action.token
                    }

                    default:
                        return state;

            }
    }

    export default authReducer;