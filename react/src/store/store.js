import { configureStore, applyMiddleware } from 'redux';
import rootReducer from '../reducers/rootReducer';
import ReduxThunk from 'redux-thunk';

let middleware= [ReduxThunk];

export const store= configureStore(rootReducer, applyMiddleware(...middleware));